<div class="form-group clearfix">
    <button class="btn btn-default" id="refresh"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
    <div class="btn-group pull-right">
        <button class="btn btn-primary" id="copyHtml" v-on="click: copyHtml, mouseleave: onMouseLeave" aria-label="Copied HTML!"><span class="glyphicon glyphicon-copy"></span> Copy HTML</button>
        <button class="btn btn-info" id="copyTextVersion" data-component="jaoa-article" v-on="click: copyTextVersion, mouseleave: onMouseLeave" aria-label="Copied Text!"><span class="glyphicon glyphicon-copy"></span> Copy text</button>
    </div>
</div>
