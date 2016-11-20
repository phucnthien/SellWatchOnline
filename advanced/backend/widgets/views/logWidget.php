

<table id="w0" class="table table-striped table-bordered detail-view">
    <tr><th>Người sửa</th><td><?= $model->user->username ?></td></tr>
    <tr><th>Bảng thay đổi</th><td><?= $model->table_change ?></td></tr>
    <tr><th>Nội dung sửa</th><td><?= $model->content ?></td></tr>
    <tr><th>Thời gian sửa</th><td><?= $model->created_at ?></td></tr>
</table>