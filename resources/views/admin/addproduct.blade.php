@extends('layouts.page')
@section('content')
@include('inc.message')

<br><br>
<form class="form-group"  action="{{route('productmanager.store')}}" method="post">
<fieldset>
    @csrf

<!-- Text input-->
<div class="form-group">
  
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="sku">SKU No.</label>  
    <div class="col-md-4">
    <input id="product_name_fr" name="sku" placeholder="Enter Sku" class="form-control input-md" required="" type="text">
      
    </div>
  </div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_details">PRODUCT DETAILS</label>  
  <div class="col-md-4">
  <input id="product_name_fr" name="product_details" placeholder="PRODUCT DESTAILS" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">

      @if ($categories->count()>0)
       
        <select id="product_category" name="product_category" class="form-control">
            @foreach ($categories as $category)
              <option>{{$category->name}}</option>
             @endforeach
        </select>
       
      @endif
    
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
  <input id="available_quantity" type="number" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">
    
  </div>
</div>



<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="product_description"></textarea>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">PRICE</label>  
  <div class="col-md-4">
  <input id="percentage_discount" name="price" type="number" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="discounted_price">DISCOUNTED PRICE</label>  
    <div class="col-md-4">
    <input id="percentage_discount" name="discounted_price" type="number" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" required="" type="text">
      
    </div>
  </div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="color1">COLOR 1</label>  
  <div class="col-md-4">
  <input id="stock_alert" name="color1" placeholder="Enter HEX code of Color" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="color2">COLOR 2</label>  
    <div class="col-md-4">
    <input id="stock_alert" name="color2" placeholder="Enter HEX code of Color" class="form-control input-md" required="" type="text">
      
    </div>
  </div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="color3">COLOR 3</label>  
    <div class="col-md-4">
    <input id="stock_alert" name="color3" placeholder="Enter HEX code of Color" class="form-control input-md" required="" type="text">
      
    </div>
  </div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="color4">COLOR 4</label>  
    <div class="col-md-4">
    <input id="stock_alert" name="color4" placeholder="Enter HEX code of Color" class="form-control input-md" required="" type="text">
      
    </div>
  </div>


<!-- Text input-->


<!-- Button -->
<div class="form-group">
  
  <div class="col-md-4">
    <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Upload</button>
  </div>
  </div>

</fieldset>
</form>
<br><br>
@endsection