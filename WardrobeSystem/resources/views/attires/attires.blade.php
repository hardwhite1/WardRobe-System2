<style>
    .quote-box {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f0f4f8;
        border-left: 5px solid #007bff;
        padding: 15px 25px;
        margin-bottom: 30px;
        border-radius: 6px;
        color: #333;
    }

    .item-list {
        list-style-type: none;
        padding-left: 0;
    }

    .item-list li {
        background: #ffffff;
        border: 1px solid #dcdcdc;
        margin: 10px 0;
        padding: 15px;
        border-radius: 4px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.05);
    }

    .item-list li strong {
        display: block;
        color: #007bff;
        font-size: 1.1em;
        margin-bottom: 5px;
    }
</style>

<div class="quote-box">
     Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead 
</div>


<ul class="item-list">
     @foreach($attiresModel as $attireModel)
     <li>     
          <strong>Name: {{$attireModel->name}}</strong>
          <strong>Price: {{$attireModel->price}}</strong>
          <strong>Color: {{$attireModel->color}}</strong>
          <strong>Size: {{$attireModel->size}}</strong>       
     </li>

     @endforeach
</ul>
     
