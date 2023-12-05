<!-- 店舗一覧ページ -->
<a href="{{ route('restaurants.create') }}"> Create New Restaurant</a> 
 <table>
     <tr>
         <th>Name</th>
         <th>Description</th>
         <th>Price</th>
         <th>Category ID</th>
         <th >Action</th>
     </tr>
     @foreach ($restaurants as $restaurant)
     <tr> <!-- BladeではPHPのコードを{{と}}で囲むことで変数の中身をそのまま表示できる -->
         <td>{{ $restaurant->name }}</td>
         <td>{{ $restaurant->description }}</td>
         <td>{{ $restaurant->price }}</td>
         <td>
              @foreach ($restaurant->categories as $category)
                {{$category->id}}
              @endforeach
         </td>
            <!-- Show、Editをクリックすると、ルーティングファイルのRoute::resourceの1行に、↓$restaurant->idが渡る.
                 ルーティングファイルのRoute::resourceは、CRUD（index,create,store,show,edit,update,destroyなど）用
                 のURLを一度に定義できる -->
         <td> 
             <a href="{{ route('restaurants.show',$restaurant->id) }}">Show</a>
             <a href="{{ route('restaurants.edit',$restaurant->id) }}">Edit</a>
         </td>
     </tr>
     @endforeach
 </table>