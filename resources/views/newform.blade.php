
   
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{old('name') ?? $emp->name}}">
            <div class="error-message">{{ $errors->first('name') }}</div><br><br>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="text" name="age"value="{{old('age') ?? $emp->age}}">
            <div class="error-message">{{ $errors->first('age') }}</div><br><br>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{old('email') ?? $emp->email}}">
            <div class="error-message">{{ $errors->first('email') }}</div><br><br>
        </div>
        <div>
            <label for="contactno">Contact Number:</label>
            <input type="text" name="contactno" value="{{old('contactno') ?? $emp->contactno}}">
            <div class="error-message">{{ $errors->first('contactno') }}</div><br><br>
        </div>
        <div class="mb-3 mt-3">
  <label for="companyid" class="col-sm-2">Company Name: </label>
  <div class="col-sm-10">
  <select name="companyid" id="companyid">
      <option value="" disabled> Select Company ID </option>
      @foreach($Companies as $company)
          <option value="{{$company->id}}"  {{$company->id == $emp->companyid ? 'selected' : ''}}> {{$company->cpyname}} </option>
      @endforeach
  </select>
  </div>
</div>
 



<style>
  .error-message {
    color: red;
}
  </style>