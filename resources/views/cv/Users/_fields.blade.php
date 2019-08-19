@csrf
<input type="text" class="form-control" name="user_id" value="{{Auth::id()}}" hidden>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label class="bmd-label-floating">Fist Name</label>
            <input type="text" class="form-control" name="first_name" value="{{old('first_name',$user->profile->first_name)}}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="bmd-label-floating">Last Name</label>
            <input type="text" class="form-control" name="last_name" value="{{old('last_name',$user->profile->last_name)}}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label >Birthdate</label>
            <input type="date" class="form-control" name="birthdate" value="{{old('birthdate',$user->profile->birthdate)}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label class="bmd-label-floating">Cell Phone</label>
            <input type="text" class="form-control" name="celular" value="{{old('celular',$user->profile->celular)}}">
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label class="bmd-label-floating">Adress</label>
            <input type="text" class="form-control" name="adress" value="{{old('adress',$user->profile->adress)}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>About Me</label>
            <div class="form-group">
                <textarea class="form-control" rows="5" name="description">{{old('description',$user->profile->description)}}</textarea>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-4">
        <h4 class="title">Avatar</h4>
        <input type="file" name="..." />
    </div>
    <div class="col-md-3 col-sm-4">
        <h4 class="title">Importar CV</h4>
        <input type="file" name="..." />
    </div>
</div>