<div class="bs-docs-section">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-5">
          <div class="well bs-component">
            <form class="form-horizontal" action="/" method="post">
              <fieldset>
                <div class="form-group is-empty">
                  <label for="text" class="col-md-2 control-label">Title</label>
                  <div class="col-md-10">
                    <input class="form-control" id="inputTitle" name="title" placeholder="Title" type="text">
                  </div>
                <span class="material-input"></span>
              </div>
                <div class="form-group is-empty">
                  <label for="textArea" class="col-md-2 control-label">Textarea</label>

                  <div class="col-md-10">
                    <textarea class="form-control" rows="3" id="textArea" name="content"></textarea>
                    <span class="help-block">Type Your Memo !!</span>
                  </div>
                <span class="material-input"></span>
              </div>
              <div class="form-group">
                  <label for="select111" class="col-md-2 control-label">Category</label>
                  <div class="col-md-10">
                    <select id="select" class="form-control" name="category">
                      <option>PHP</option>
                      <option>Ruby</option>
                      <option>Javascript</option>
                      <option>Java</option>
                      <option>Server</option>
                    </select>
                  </div>
                <span class="material-input"></span>
              </div>
                <div class="form-group">
                  <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                  </div>
                </div>
              </fieldset>
            </form>
        </div>
      </div>

      <div class="col-md-7">
        <div class="bs-component">
            <?php foreach ($this->vars['articles'] as $key => $value): ?>
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <?= $this->h($value['title']); ?>
                </div>
                <div class="panel-body">
                  <div id="content"><?= $this->h($value['content']); ?></div>
                  <div id="footer">
                    <span class="label label-info top-date"><?= $this->h($value['created']); ?></span>
                    <span class="top-category"><a href="javascript:void(0)" class="btn btn-default"><?= $this->h($value['category']); ?><div class="ripple-container"></div></a></span>
                    <span><a href="/articles/detail/<?= $this->h($value['id']); ?>" class="btn btn-primary">Detail<div class="ripple-container"></div></a></span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <ul class="pagination">
            <li class="disabled"><a href="javascript:void(0)">«</a></li>
            <li class="active"><a href="javascript:void(0)">1</a></li>
            <li><a href="javascript:void(0)">2</a></li>
            <li><a href="javascript:void(0)">3</a></li>
            <li><a href="javascript:void(0)">4</a></li>
            <li><a href="javascript:void(0)">5</a></li>
            <li><a href="javascript:void(0)">»<div class="ripple-container"></div></a></li>
          </ul>
      </div>
    </div>
  </div>
