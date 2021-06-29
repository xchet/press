<div class="col-lg-6 p-t-20"> 
    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
        <input class = "mdl-textfield__input" type = "text" id = "txtFirstName" name="name" value="{{ isset($category) ? $category->name : 'old(name)' }}">
        <label class = "mdl-textfield__label">Category Name</label>
        @if ($errors->has('name'))
            <small>{{ $errors->first('name') }}</small>
        @endif
    </div>
</div>
<div class="col-lg-6 p-t-20"> 
    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
        <input class = "mdl-textfield__input" type = "file" id = "txtLasttName" name="cover_img">
        {{-- <label class = "mdl-textfield__label" >Last Name</label> --}}
    </div>
</div>

<div class="col-lg-12 p-t-20"> 
    <div class = "mdl-textfield mdl-js-textfield txt-full-width">
        <textarea class="mdl-textfield__input" rows="4" id="education" name="description">
            {{ isset($category) ? $category->description : old(description) }}
        </textarea>
        <label class = "mdl-textfield__label" for = "text7">Description</label>
    </div>
</div>