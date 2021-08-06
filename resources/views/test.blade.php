@extends('layouts.app')
@section('content')
    <p>{{session('status')}}</p>
    <div class="
                py-20
                h-screen
                bg-gray-400
                px-2
    ">
    <div class="max-w-md
    mx-auto
    bg-white
    rounded-lg
    overflow-hidden
    md:max-w-lg">
    <div class="md:flex w-full">
        <div class="p-4 border-b-2">
    <form action="{{url('test')}}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('file')? 'has-error': ''}}">
        <label for="file" class="control-label"> CSV File to import</label>
        <input type="file" id="file" class="form-control" name="file" required>

        @if ($errors->has('file'))
        <span class="help-block">
            <strong>{{$errors->first('file')}}</strong>
        </span>

        @endif
        </div>
        <p><button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i>
        Upload</button></p>
    </form>
        </div>
</div>
    </div>
</div>

@endsection
