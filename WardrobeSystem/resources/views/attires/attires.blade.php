<style>
    .item-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); /* responsive grid */
    gap: 20px; /* space between cards */
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.item-list li {
    background: #ffffff;
    border: 1px solid #dcdcdc;
    padding: 15px;
    border-radius: 6px;
    box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.08);
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.item-list li img {
    max-width: 100%;
    height: auto;
    border-radius: 4px;
    margin-bottom: 10px;
}

.item-list li strong {
    color: #007bff;
    font-size: 1em;
    margin-bottom: 4px;
}
.edit{
    margin-bottom: 10px; background-color: #28a745; color: white; border: none; padding: 8px 12px; border-radius: 4px; cursor: pointer;
}

</style>

<ul class="item-list">
     @foreach($attiresModel as $attireModel)
     <li>
          <!-- Display image -->
          <img src="{{ asset('storage/' . $attireModel->image) }}" alt="{{ $attireModel->name }}">


          <!-- Display details -->
          <strong>Name: {{$attireModel->name}}</strong>
          <strong>Price: {{$attireModel->price}}</strong>
          <strong>Color: {{$attireModel->color}}</strong>
          <strong>Size: {{$attireModel->size}}</strong>
          <button class="edit">
               <a href="{{ route('edit', $attireModel->id) }}" style="color: white; text-decoration: none;">Edit</a>
          </button>    
            <form action="{{route('destroy', $attireModel->id)}}" method="post" style="margin-top: 10px";>
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" style="color: red; text-decoration: none;">DELETE</button>            
            </form>    
     </li>
     @endforeach
</ul>

<button class="edit">
    <a href="{{ route('/') }}" style="color: white; text-decoration: none;">Back Home</a>
</button> 

     
