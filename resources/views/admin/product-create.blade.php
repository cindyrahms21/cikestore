@extends('admin.admin')

@section('content')

<div style="height:70px"></div>
<section class="bg0 p-t-23 p-b-140">
<div class="container">
<div class="row">
<div class="col-lg-8">
<h1>Create Product</h1>
    <form class="form-group" action="{{url('/product-store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <?php if($product->id!=null){?>
        <label>ID</label>
        <input class="form-control" name="id" type="text" placeholder="id" value="{{$product->id}}" readonly/>
    <?php } ?>
    <label>Image</label>
    <input class="btn btn-default" type="file" name="image">
    <br>
    <?php if($product->img_path!=null){?>
        <img width="200px" src="{{url($product->img_path)}}">
    <?php } ?>
    <label>Name</label>
    <input class="form-control" name="name" type="text" placeholder="name product" value="{{$product->name}}"/>
    <label>Price</label>
    <input class="form-control" name="price" type="text" placeholder="price" value="{{$product->price}}"/>
    <label>Stock</label>
    <input class="form-control" name="stock" type="text" placeholder="stock" value="{{$product->stock}}"/>
    <label>Description</label>
    <input class="form-control" name="description" type="text" placeholder="description" value="{{$product->description}}"/>
    <label>Link Tokopedia</label>
    <input class="form-control" name="tokopedia" type="text" placeholder="description" value="{{$product->tokopedia}}"/>
    <label>Link Bukalapak</label>
    <input class="form-control" name="bukalapak" type="text" placeholder="description" value="{{$product->bukalapak}}"/>
    <label>Link Lazada</label>
    <input class="form-control" name="lazada" type="text" placeholder="description" value="{{$product->lazada}}"/>
    <label>Link Shopee</label>
    <input class="form-control" name="shopee" type="text" placeholder="description" value="{{$product->shopee}}"/>
    <br>
    <br>
    <?php if($product->id==null){?>
    <input type="submit" class="btn btn-primary" value="SUBMIT"/>
    <?php } else{ ?>
    <input type="submit" class="btn btn-success" value="UPDATE"/>
    <?php } ?>
    </form>
</div>
</div>
</div>
</section>

@endsection