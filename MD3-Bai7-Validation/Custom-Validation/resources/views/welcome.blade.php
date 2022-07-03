<div class="content">
    <div class="title m-b-md">
        Laravel Cusstom Validation
    </div>
    <div class="form-custom-validation">
        <form action="{{route('name')}}" method="get">
            <label for="name">Name: </label>
            <input id="name" name="name" type="text" placeholder="Enter the full name">
            <p style="color: red">{{ ($errors->has('name') ? $errors->first('name') : "" )}}</p>
            <br>
            <label for="age">Age: </label>
            <input id="age" name="age" type="text" placeholder="Enter the age">
            <p style="color: red">{{ ($errors->has('age') ? $errors->first('age') : "" )}}</p>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
{{-- <div class="error-message">
    @if ($errors->any())
        @foreach($errors->all() as $nameError)
            <p style="color:red">{{ $nameError }}</p>
        @endforeach
    @endif
</div> --}}
<p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>
