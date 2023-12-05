<!-- 店舗一覧ページ -->
<a href="{{ route('restaurants.create') }}"> 新規店舗登録</a>
 
 <table>
     <tr>
         <th>Name</th>
         <th>Description</th>
         <th>Price</th>
         <th>Category ID</th>
         <th >Action</th>
     </tr>
     @foreach ($restaurants as $restaurant)
     <tr>
         <td>{{ $restaurant->name }}</td>
         <td>{{ $restaurant->description }}</td>
         <td>{{ $restaurant->price }}</td>
         <td>
              @foreach ($restaurant->categories as $category)
                {{$category->id}}
              @endforeach
         </td>
         <td>
             <a href="{{ route('restaurants.show',$restaurant->id) }}">Show</a>
             <a href="{{ route('restaurants.edit',$restaurant->id) }}">Edit</a>
         </td>
     </tr>
     @endforeach
 </table>