<!-- this head section  -->

@include('backend.includes.head')

    <!-- vendor css -->
    @include('backend.includes.css')

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
   <!-- this is left side var  -->
 @include('backend.includes.sidebar')

    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
   
 
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="br-mainpanel">
  
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Blank page</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <div class="br-pagebody">
          <form action="#" method="post">
             
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="name">Product Name</label>
              <input type="text" name="name" id="name" placeholder="Enter product Name"
              class="form-control">
              <span class="text-danger">
                @error('name')
                {{$message}} 
                @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="description">Product Description</label>
              <input type="text" name="des" id="des" placeholder="Enter product Description"
              class="form-control">
              <span class="text-danger">
                @error('des')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="catagory">Product Catagory</label>
              <select name="catagory" id="catagory"  class="form-control">
                  <option value="">-----select catagory----</option>
                  <option value="man">Man</option>
                  <option value="women">women</option>
                  <option value="children">children</option>
                </select>
            </div>
            <div class="form-group">
              <label for="size">Product Size</label>
              <select name="size" id="size" class="form-control">
                  <option value="">-----select size----</option>
                  <option value="s">s</option>
                  <option value="m">m</option>
                  <option value="xl">xl</option>
                </select>
            </div>
          </div><!-- col-6 -->
          <div class="col-sm-6">
              <div class="form-group">
              <label for="cost price">Cost price</label>
              <input type="text" name="costPrice" id="costPrice" placeholder="Enter product cost price"
              class="form-control">
            </div>
             
              <div class="form-group">
              <label for="sale price">Sale price</label>
              <input type="text" name="salePrice" id="salePrice" placeholder="Enter product Sale price"
              class="form-control">
             </div>
             
              <div class="form-group">
              <label for="quentity">Quentity</label>
              <input type="text" name="quentity" id="quentity" placeholder="product Quentity"
              class="form-control">
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select name="status" id="status" class="form-control">
                  <option value="">-----select status----</option>
                  <option value="1">active</option>
                  <option value="2">inactive</option>
                </select>
            </div>
            <div class="form-group">
                <button class="form-control btn btn-info">Add product</button>
            </div>

            </div>


        </div><!-- row -->
        </form>

      </div><!-- br-pagebody -->
      
      <!-- footer -->
      @include('backend.includes.footer')

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
   
    <!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->

    <!-- this is the rightbar  -->
    @include('backend.includes.rightbar')
    <!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
  <!-- br-mainpanel -->


    <!-- ########## END: MAIN PANEL ########## -->

   <!-- this is java script section  -->
   @include('backend.includes.jss')
  </body>
</html>

