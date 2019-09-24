@csrf
<label for="title">Titulo del proyecto: </label>
<input type="text" name="title" id="" value="{{  old('title',$project->title) }}">
<br>
<br>
<label for="url">Url del proyecto</label>
<input type="text" name="url" value="{{  old('url',$project->url) }}">
<br>
<br>
<label for="description">Descripcion: </label>
<textarea name="description" id="" cols="30" rows="10">
            {{  old('description',$project->description) }}
        </textarea>
<br><br>
<button type="submit">{{$btnText}}</button>
