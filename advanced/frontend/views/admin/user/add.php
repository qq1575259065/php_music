<form action="<?= \yii\helpers\Url::to(['admin/film/add-save'])?>" enctype="multipart/form-data" method="post">
    <table>
        <input type="hidden" name="_csrf-frontend" value="<?= Yii::$app->request->csrfToken ?>" />
        <tr>
            <input type="text" placeholder="用户名" name="username">
        </tr>
        <tr>
            <input type="text" placeholder="昵称" name="nickname">
        </tr>
        <tr>
            <input type="text" placeholder="密码" name="password">
        </tr>
        <tr>
            <input type="text" placeholder="年龄" name="age">
        </tr>
        <tr>
            <input type="datetime" placeholder="生日" name="birth">
        </tr>
        <tr>
            <input type="text" placeholder="地区" name="area_id">
        </tr>
        <tr>
            <input type="text" placeholder="会员名称" name="vip_id">
        </tr>
        <tr>
            <input type="text" placeholder="是否是管理员" name="is_admin">
        </tr>
        <tr>
            <input type="file" name="user_photo">
        </tr>
        <tr>
            <input type="submit" value="添加">
        </tr>
    </table>
</form>
