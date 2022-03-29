@extends('backend.layouts.master')

@section('main-content')
<div class="card">
    <h5 class="card-header">Add Category</h5>
    <div class="card-body">
      <form method="post" action="http://127.0.0.1:8000/admin/category">
        <input type="hidden" name="_token" value="QAnNdGQDpqH7j7KwD7U72c2FxPNISI22Z1P8AWJJ">
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="" class="form-control">
                  </div>

        <div class="form-group">
          <label for="summary" class="col-form-label">Summary</label>
          <textarea class="form-control" id="summary" name="summary"></textarea>
                  </div>

        <div class="form-group">
          <label for="is_parent">Is Parent</label><br>
          <input type="checkbox" name='is_parent' id='is_parent' value='1' checked> Yes
        </div>


        <div class="form-group d-none" id='parent_cat_div'>
          <label for="parent_id">Parent Category</label>
          <select name="parent_id" class="form-control">
              <option value="">--Select any category--</option>
                                <option value='3'>Kid&#039;s</option>
                                <option value='1'>Men&#039;s Fashion</option>
                                <option value='2'>Women&#039;s Fashion</option>
                        </select>
        </div>

        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Photo</label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
          <input id="thumbnail" class="form-control" type="text" name="photo" value="">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                  </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
          </select>
                  </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>

@endsection

