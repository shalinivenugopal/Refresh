@extends('admin.layout.master')


@section('content')
    <form action="{{ route('admin.home') }}" method="POST">
        {{ csrf_field() }}
        <div class="c-card">
            <div class="row u-mb-medium">
                
                
                <div class="col-lg-6 u-mb-xsmall">
                    <div class="c-field">
                        <label class="c-field__label" for="input4">Name</label>
                        <input class="c-input" id="input2" placeholder="Enter name" name="name"    type="text" required>
                    </div>
                </div>
                
              
                
            </div>
            <div  style="text-align: center">
                <button class="c-btn c-btn--success u-mb-xsmall" type="submit">Success</button>
            </div>
        </div>
    </form>

@endsection