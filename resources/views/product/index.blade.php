<!DOCTYPE html>
<html lang="en">

<head>
    @include('link')
</head>
<div style="z-index:5605" class="">
</div>

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
                                <div style="height:67px" class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Welcome to Material Able</p>
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

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Hover Table</h5>
                                        <span>use class <code>table-hover</code> inside table element</span>
                                        <div class="card-header-right">
                                          
                                            <a href="{{ route('products.create') }}"><button class="btn waves-effect waves-light btn-success"> <i style="color:aliceblue" class="fa fa-plus-circle" aria-hidden="true"></i>Add new</button> </a>
                                            <a href="{{ route('category.index') }}"> <button class="btn waves-effect waves-light btn-info"><i style="color:aliceblue" class="fa fa-th" aria-hidden="true"></i></i>Management Category</button> </a>
                                        </div>
                                    </div>
                                    <div style="padding:0" class="card-block table-border-style">
                                        <div style="padding:0 20px"class="table-responsive">
                                            <table  class="table table-bordered>
                                               
                                              

                                                    @extends('product.layout')
                                                    
                                                    @section('content')
                                                    
                                                    @if ($message = Session::get('success'))             
                                                   </div>
                                                   <div style="margin:0 ; " class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <p style="padding:0;margin:0" >{{ $message }}</p>
                                                  </div>
                                                </div>
                                         
                                                   @endif 
                                                   @if ($message = Session::get('error'))             
                                                </div>
                                                <div style="margin:0 ; " class="alert alert-danger  alert-dismissible">
                                                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                 <p style="padding:0;margin:0" >{{ $message }}</p>
                                               </div>
                                             </div>
                                      
                                                @endif 

                                                @if ($message = Session::get('edit'))             
                                            </div>
                                            <div style="margin:0 ; " class="alert alert-info alert-dismissible">
                                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                             <p style="padding:0;margin:0" >{{ $message }}</p>
                                           </div>
                                         </div>
                                  
                                            @endif 
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Price</th>
                                                        <th>Category</th>
                                                        <th>Image</th>
                                                        <th>Details</th>
                                                        <th style="text-align:center" >Action</th>
                                                    </tr>
                                                </thead>  
                                                <tbody> 
                                                    @foreach($products as $key => $product)                                                    
                                                    <tr>                                                    
                                                         <td>{{$key+1}}</td>                                                    
                                                         <td>{{ $product->name }}</td>                                                    
                                                         <td>{{ $product->price }}</td>                                                    
                                                         <td>{{ $product->category->name }}</td>                                                    
                                                         <td><img src="{{ asset('image/product/'.$product->image) }}" alt="" border=3 height=30 width=50></td>                                                    
                                                         <td>{{ $product->description }}</td>                                                    
                                                         <td style="width:210px">                                                    
                                                    <form  action="{{ route('products.destroy',$product->id) }}" method="POST">                                                    
                                                         <a  data-toggle="tooltip" data-placement="top" title="Show" class="btn bg-primary" href="{{ route('products.show',$product->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>                                                    
                                                         <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn bg-success" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>                                                    
                                                         <a data-toggle="tooltip" data-placement="top" title="Delete"class="btn bg-danger" href="{{ route('products.destroy',$product->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>                                                    
                                                    </form>                                                    
                                                        </td>                                                    
                                                    </tr>
                                                </tbody>
                                                @endforeach
                                                    
                                                @endsection
 
                                            </table>
                                        </div>
                                    </div>
                                </div>
</body>

</html>

