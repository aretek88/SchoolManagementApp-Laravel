
    @extends('layouts.app')

    @section('content')
        @include('menu.app')
        <div class="container">
            {{ Form::open(array('url' => route('schedules.update',[$course->id,$subject->id,$schedule->id]))) }}
            @method('PUT')
            <h2 class="margin-top-20">Horario</h2>
            <h5 class="margin-top-20">Vincula el horario con la asignatura</h5>
            <div class="row margin-top-20 align-items">
                <label>Curso</label>
                {{Form::select('course_name',$courses, $course->id, ['class' => 'form-control', 'disabled' => true])}}
                <input type="hidden" name ="course_id" value="{{$course->id}}">
            </div>
            <div class="row margin-top-20 align-items">
                <label>Asignatura</label>
                {{Form::select('course_name',$subjects, $subject->id, ['class' => 'form-control', 'disabled' => true])}}
                <input type="hidden" name ="subject_id" value="{{$subject->id}}">
            </div>
            <div class="form-group row">
                <label for="example-time-input" class="col-form-label">Inicio</label>
                <input class="form-control" type="time" id="example-time-input" name="time_start" value="{{$schedule->time_start}}">
            </div>
            <div class="form-group row">
                <label for="example-time-input" class="col-form-label">Fin</label>
                <input class="form-control" type="time" id="example-time-input" name="time_end" value="{{$schedule->time_end}}">
            </div>
            <div class="row margin-top-20 align-items">
                {{ Form::select('days[]', $days, $selectedDays, ['id' => 'days', 'multiple' => 'multiple', 'class'=>'custom-select', 'name'=> 'days[]'])}}
            </div>

            <div class="form-group text-center margin-top-20">
                <button class="btn btn-success btn-submit">Guardar</button>
            </div>
            {{ Form::close() }}
        </div>
    @endsection

