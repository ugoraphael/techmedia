@extends('layout.adminLayout')

@section('content')

    <h1>ADMIN INDEX</h1>


  
    <form action="" method="post" enctype="multipart/form-data" id="make_request">
        <div class="row">
           
            <div class="col-md-6 col-md-offset-3">

                <input type="text" name="post_title" placeholder="Post title" id="post_title">
                
                <input type="file" name="post_image" id="post_image">

                
                  <select name="type" id="">
                        <option value="">Type</option>
                        <option value="">Home</option>
                        <option value="">Garden</option>
                        <option value="">Kitchen</option>
                        <option value="">Electricity</option>
                        <option value="">Isolation</option>
                    </select>

                    <select name="budget" id="">
                        <option value="">Budget</option>
                        <option value="">#10000 - #100k</option>
                        <option value="">#100k - #200k</option>
                        <option value="">#200k - #300k</option>
                        <option value="">#300 - #400k</option>
                        <option value="">#400 - #500++</option>
                    </select>




                <textarea name="post_content" id="post_content" placeholder="Describe your project here"></textarea>

            </div>
           <!--  <div class="col-sm-4" style="color: #333;">
                 <select name="type" id="">
                     <option value="">Type</option>
                     <option value="">Home</option>
                     <option value="">Garden</option>
                     <option value="">Kitchen</option>
                     <option value="">Electricity</option>
                     <option value="">Isolation</option>
                 </select>
                 
                 <select name="budget" id="">
                     <option value="">Budget</option>
                     <option value="">#10000 - #100k</option>
                     <option value="">#100k - #200k</option>
                     <option value="">#200k - #300k</option>
                     <option value="">#300 - #400k</option>
                     <option value="">#400 - #500++</option>
                 </select>
                 
                 <select name="your_area" id="">
                     <option value="">Your Area</option>
                     <option value="">Lagos</option>
                     <option value="">Enugu</option>
                     <option value="">Abuja</option>
                     <option value="">Ebonyi</option>
                     <option value="">Delta</option>
                 </select>
                 
                 <select name="time_to_be_done" id="">
                     <option value="">20 Days</option>
                     <option value="">1 month</option>
                     <option value="">3 months</option>
                     <option value="">5 months</option>
                     <option value="">7 months</option>
                     <option value="">This year</option>
                 </select>


            </div> -->
            <!-- <div class="col-sm-4" style="color: #333;">
                 <textarea name="your_message" id="your_message" placeholder="Describe your project here"></textarea>


            </div> -->

        </div>
        
        <input type="submit" name="create" value="Send" class="pull-right">
    </form>



@endsection