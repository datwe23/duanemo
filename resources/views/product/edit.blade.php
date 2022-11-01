<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.link')
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('layout/header')
               
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    
                    @include('layout/navbar')
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div style="height:51px" class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">PRODUCT EDIT PAGE</h5>
                                            <p class="m-b-0">Welcome to ahion's product editing page</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                              <!-- Basic Form Inputs card start -->
                                 <div  class="row">
                                     <div class="col-sm-12">                            
                                        <div  class="card">
                                            <div class="card-header">
                                                <h5>Hover Table</h5>
                                                <span>use class <code>table-hover</code> inside table element</span>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                @extends('product.layout')
                                                @section('content')
                                                <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group row">       
                                                        <label class="col-sm-2 col-form-label">Product name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Category</label>
                                                        <div class="col-sm-10">
                                                            <select name="category" class="form-control">
                                                                @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Product price</label>
                                                        <div class="col-sm-10">
                                                          <input type="number" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">
                                                         </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">New product pictures</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control" placeholder="Image" value="" name="imageProduct" />
                                                         </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Current product images</label>
                                                        <div class="col-sm-10">
                                                          <img src="{{ asset('../../image/product/'.$product->image) }}" alt="" border=3 height=150 width=200>
                                                         </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Description</label>
                                                         <div class="col-sm-10">
                                                        <textarea class="ckeditor" id="editor"class="form-control description" style="height:150px" name="description" placeholder="Description">{{ $product->description }}</textarea>
                                                          
                                                         </div>
                                                    </div>

                                                    <div style="padding:20px 0" class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                        <button type="submit"class="btn waves-effect waves-light btn-success"><i class="fa fa-check-circle-o" aria-hidden="true"></i>Submit</button>
                                                    </div>
                                                   @endsection
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Basic Form Inputs card end -->
                                    </div>
                                </div>
                                         
</body>

</html>

