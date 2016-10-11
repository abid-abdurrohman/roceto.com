<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Create Statistic</h4>
            </div>
            <div class="modal-body">
              {!! Form::model(new App\Model\Statistic, ['action' => ['StatisticController@store', $events->id], 'class'=>'form-horizontal']) !!}
                  @include('admin.statistic.form.form', ['submit_text' => 'Add Statistic'])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->
