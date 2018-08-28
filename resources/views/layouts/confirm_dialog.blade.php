
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this house ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                {!! Form::open(['action' => ['HousesController@destroy',$house->id], 'method'=>'POST']) !!}
                {{Form::hidden('_method' ,'DELETE') }}
                {{Form::submit('Delete',['class'=>"pull-left btn btn-danger m0"]) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>