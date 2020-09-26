@extends('dashboard.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('plugnis/fancybox/source/jquery.fancybox.css') }}">
@endsection

@section('content')
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary box-solid">
        <div class="box-header box-header-background with-border">
          <h3 class="box-title">{{ $title }}</h3>
          <div class="box-tools pull-right">
            <a href="{{ url('dashboard/users') }}" class="btn btn-warning" style="padding-bottom: 3px;"> <i class="fa fa-angle-double-left"></i>&nbsp; BACK</a>
          </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
            <form role="form" id="addEditUser" action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <input type="hidden" name="userId" value="{{ (!empty($result->id))?($result->id):('') }}">

            <div class="box-body col-md-12 ">

            <div class="row">

                <div class="form-group col-md-6">
                  @php $input = 'NAME'; @endphp
                  <label for="">NAME <span class="text-danger">*</span></label>
                  <input type="text" class="form-control{{ $errors->has('NAME') ? ' is-invalid' : '' }}" id="NAME" placeholder="ENTER NAME" value="{{ (!empty($result->NAME))?($result->NAME):('') }}" name="{{$input}}" required>
                  @if ($errors->has($input))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first($input) }}</strong>
                    </span>
                  @endif
                </div>

                <div class="form-group col-md-6">
                    @php $input = 'PHONE'; @endphp
                    <label for="">PHONE <span class="text-danger">*</span></label>
                    <input type="text" class="form-control{{ $errors->has('PHONE') ? ' is-invalid' : '' }}" id="PHONE" placeholder="ENTER PHONE" value="{{ (!empty($result->PHONE))?($result->PHONE):('') }}" name="{{$input}}" required>
                    @if ($errors->has($input))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first($input) }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group col-md-6 ">
                    @php $input = 'PASSWORD'; @endphp
                    <label for="">PASSWORD <span class="text-danger">*</span></label>
                    <input type="password" class="form-control{{ $errors->has('PASSWORD') ? ' is-invalid' : '' }}" id="PASSWORD" placeholder="ENTER PASSWORD" value="{{ (!empty($result->PASSWORD))?($result->PASSWORD):('') }}" name="{{$input}}" required>
                    @if ($errors->has($input))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first($input) }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    @php $input = 'IMAGE'; @endphp
                    <label for="">USER IMAGE <span class="text-danger">*</span></label>
                    <input type="file" class="form-control{{ $errors->has('IMAGE') ? ' is-invalid' : '' }}" id="IMAGE" placeholder="ENTER PASSWORD" value="{{ (!empty($result->IMAGE))?($result->IMAGE):('') }}" name="{{$input}}">
                </div>

                <div class="form-group col-md-6 ">
                        @php $input = 'ROLE'; @endphp
                        <label for="exampleInputEmail1">SELECT ROLE USER <span class="text-danger">*</span></label>
                        @if (!empty($result->id))
                        @php $id = $result->role; @endphp
                        @endif

                        <select name="{{ $input }}" class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}">
                        @if(!empty($id))
                        {{-- @php dd('asd'); @endphp --}}
                            @if(isset($id) == 'ADMIN')
                                <option  value="">ADMIN</option>
                            @elseif( isset($id) == 'EMPLOYEE')
                                <option  value="">EMPLOYEE</option>
                            @else
                                <option  value="">NORMAL</option>
                            @endif

                            <option  value="ADMIN" {{ isset($row) && $row[$input] == 'ADMIN' ? 'selected' : ''}}>ADMIN</option>
                            <option  value="EMPLOYEE" {{ isset($row) && $row[$input] == 'EMPLOYEE' ? 'selected' : ''}}>EMPLOYEE</option>
                            <option  value="NORMAL" {{ isset($row) && $row[$input] == 'NORMAL' ? 'selected' : ''}}>NORMAL</option>
                        @else

                            <option  value="">SELECT USER TYPE</option>
                            <option value="ADMIN" {{ isset($row) && $row[$input] == 'ADMIN' ? 'selected' : ''}}>ADMIN</option>
                            <option value="EMPLOYEE" {{ isset($row) && $row[$input] == 'EMPLOYEE' ? 'selected' : ''}}>EMPLOYEE</option>
                            <option  value="NORMAL" {{ isset($row) && $row[$input] == 'NORMAL' ? 'selected' : ''}}>NORMAL</option>
                        @endif


                        </select>
                        @if ($errors->has($input))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first($input) }}</strong>
                            </span>
                        @endif
                    </div>

                </div>

            </div>

            <div class="box-body col-md-12 ">
              <div class="form-group row">
                  <div class=" col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
            </div>
        </div>
    </form>
</div>

</section>
@endsection


@section('js')
<script type="text/javascript" src="{{asset('plugnis/fancybox/source/jquery.fancybox.js')}}"></script>
<script src="{{ asset('js/custom-script.js') }}"></script>
@endsection
