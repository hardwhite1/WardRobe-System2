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

</style>

<div class="quote-box">
     Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead 
</div>


<ul class="item-list">
     @foreach($attiresModel as $attireModel)
     <li>
          <!-- Display image -->
          <img src="{{ asset('storage/attires/' . $attireModel->image) }}" alt="{{ $attireModel->name }}">

          <!-- Display details -->
          <a href="{{route('edit', $attireModel->id)}}">Edit</a>
          <strong>Name: {{$attireModel->name}}</strong>
          <strong>Price: {{$attireModel->price}}</strong>
          <strong>Color: {{$attireModel->color}}</strong>
          <strong>Size: {{$attireModel->size}}</strong>          
     </li>
     @endforeach
</ul>

     
