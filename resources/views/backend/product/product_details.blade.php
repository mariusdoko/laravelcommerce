@extends('admin.admin_master')
@section('admin')


<div class="container-full">

    <!-- Main content -->
    <section class="content">
    
        <!-- Basic Forms -->
        <div class="box">
            
            <div class="box-header with-border">
            @foreach($product_details as $details)
            <h4 class="box-title">Name: {{ $details->product_name_en }}</h4>
            @endforeach
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                        <div class="col">
                
                
                            <form>
                                <div class="row">
                                    <div class="col-12">

                                        <div class="row"> <!-- start 1st row  -->
                                            
                                            <div class="col-md-3 media bg-white mb-20">
                                                <div class="media-body">
                                                    @foreach($product_details as $details)
                                                  <p><strong>Product Name English</strong></p>
                                                  <p>{{$details->product_name_en}}</p>
                                                  @endforeach
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            
                                            <div class="col-md-3 media bg-white mb-20">
                                                <div class="media-body">
                                                    @foreach($product_details as $details)
                                                  <p><strong>Product Name Albanian</strong></p>
                                                  <p>{{$details->product_name_al}}</p>
                                                  @endforeach
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            <div class="col-md-3 media bg-white mb-20" >
                                                <div class="media-body">
                                                    @foreach($product_details as $details)
                                                    <p><strong>Category</strong></p>
                                                    <p>{{$details['category']['category_name_en']}}</p>
                                            
                                                  @endforeach
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            <div class="col-md-3 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>SubCategory</strong></p>
                                                  <p>{{$details['subcategory']['subcategory_name_en']}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                        </div><!-- // end 1st row -->
                                        



                                        <div class="row"> <!-- start 2nd row  -->
                                            
                                            <div class="col-md-3 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Sub-SubCategory</strong></p>
                                                  <p>{{$details['subsubcategory']['subsubcategory_name_en']}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            
                                            <div class="col-md-3 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Brand</strong></p>
                                                  <p>{{$details['brand']['brand_name_en']}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            <div class="col-md-3 media bg-white mb-20" >
                                                <div class="media-body">
                                                  <p><strong>Product Code</strong></p>
                                                  <p>{{$details->product_code}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            <div class="col-md-3 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Product Quantity</strong></p>
                                                  <p>{{$details->product_qty}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                        </div><!-- // end 2nd row -->
                                        


                                        <div class="row"> <!-- start 3nd row  -->
                                            
                                            <div class="col-md-3 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Product Tags English</strong></p>
                                                  <p>{{$details->product_tags_en}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            
                                            <div class="col-md-3 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Product Tags Albanian</strong></p>
                                                  <p>{{$details->product_tags_al}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            <div class="col-md-3 media bg-white mb-20" >
                                                <div class="media-body">
                                                  <p><strong>Product Size English</strong></p>
                                                  <p>{{$details->product_size_en}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            <div class="col-md-3 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Product Size Albanian</strong></p>
                                                  <p>{{$details->product_size_al}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                        </div><!-- // end 3d row -->

                                        <div class="row"> <!-- start 4th row  -->
                                            
                                            <div class="col-md-3 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Product Color English</strong></p>
                                                  <p>{{$details->product_color_en}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            
                                            <div class="col-md-3 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Product Color Albanian</strong></p>
                                                  <p>{{$details->product_color_al}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            <div class="col-md-3 media bg-white mb-20" >
                                                <div class="media-body">
                                                  <p><strong>Selling Price</strong></p>
                                                  <p>{{$details->selling_price}} $</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            <div class="col-md-3 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Discount Price</strong></p>
                                                  <p>{{$details->discount_price}} $</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                        </div><!-- // end 4th row -->

                                        <div class="row"> <!-- start 5th row  -->
                                            
                                            <div class="col-md-6 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Short Description English</strong></p>
                                                  <p>{{$details->short_descp_en}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            
                                            <div class="col-md-6 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Short Description Albanian</strong></p>
                                                  <p>{{$details->short_descp_al}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                           

                                        </div><!-- // end 5th row -->

                                        <div class="row"> <!-- start 5th row  -->
                                            
                                            <div class="col-md-6 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Long Description English</strong></p>
                                                  <p>{{$details->long_descp_en}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                            
                                            <div class="col-md-6 media bg-white mb-20">
                                                <div class="media-body">
                                                  <p><strong>Long Description Albanian</strong></p>
                                                  <p>{{$details->long_descp_al}}</p>
                                                </div>
                                            </div> <!--  end col md 3 -->   

                                           

                                        </div><!-- // end 5th row -->















                                        
                                    </div> <!-- // end col12 -->
                                </div> 
                            </form>

                        </div> <!-- // end col -->
                </div>
            </div>
            
        </div>
    </section>
</div>
  

@endsection