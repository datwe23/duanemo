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
                                <div style="height:68px" class="row align-items-center">
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
                                                    <a href="{{ route('products.index') }}"><button class="btn waves-effect waves-light btn-success"><i style="color:aliceblue" class="fa fa-home" aria-hidden="true"></i>Back</button> </a>
                                                    <a href="{{ route('category.index') }}"> <button class="btn waves-effect waves-light btn-info"><i style="color:aliceblue" class="fa fa-th" aria-hidden="true"></i></i>Management Category</button> </a>
                                                </div>
                                            </div>
                                            @if ($errors->any())
                                            
                                            <div style="border:0;margin:0; background-color:#fad5d4; z-index:0" class="alert">
                                            <div style="border-bottom:1px solid #f8c4c3; height:35px" class="all">
                                                <strong style="padding-bottom:10px ; color:#ea1809d0">Whoops!</strong> There were some problems with your input.<br><br>
                                            
                                            </div>

                                            <ul style="padding-top:20px">
                                            
                                            @foreach ($errors->all() as $error)
                                            
                                            <li style="padding-bottom:10px ; color:rgba(7, 7, 7, 0.747)"><i style="padding-right:10px ; color:rgb(253, 145, 4)" class="fa fa-exclamation-triangle " aria-hidden="true"></i>{{ $error }}</li>
                                            
                                            @endforeach
                                            
                                            </ul>
                                            
                                            </div>

                                                @endif
                                                
                                                @extends('product.layout')

                                                @section('content')

                                                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                                
                                                @csrf
                                                

                                                <div class="form-group row">       
                                                    <label class="col-sm-2 col-form-label">Product name</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" name="name" class="form-control" placeholder="Name">     
                                                    </div>
                                                </div>
                                               
                                                <div class="form-group row">       
                                                    <label class="col-sm-2 col-form-label">Product name</label>
                                                    <div class="col-sm-10">
                                                      <input type="number" name="price" class="form-control" placeholder="Price">  
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">       
                                                    <label class="col-sm-2 col-form-label">Product name</label>
                                                    <div class="col-sm-10">
                                                          <input type="file" class="form-control" placeholder="Image" value="" name="imageProduct" />
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">       
                                                    <label class="col-sm-2 col-form-label">Product name</label>
                                                    <div  class="col-sm-10">
                                                         <select style="border:1px solid #cccccc"name="category" class="form-control">                                                
                                                            @foreach($categories as $category)
                                                             <option value="{{$category->id}}">{{$category->name}}</option> 
                                                            @endforeach
                                                         </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">       
                                                    <label class="col-sm-2 col-form-label">Product name</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="ckeditor" id="editor"class="form-control description" style="height:150px" name="description" placeholder="Description"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            
                                                
                                                </div>
                                                
                                                </form>
                                                
                                                @endsection
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Basic Form Inputs card end -->
                                    </div>
                                </div>
                                         
</body>

</html>

