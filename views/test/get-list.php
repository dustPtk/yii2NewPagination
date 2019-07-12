<?php
/**
 * Created by PhpStorm.
 * User: ptk
 * Date: 19/7/12
 * Time: 下午2:48
 */
?>
<div class="table-responsive">
    <table class="table table-bordered  table-hover table-text-align-center td_vertical_align_middle">
        <thead>
        <tr>
            <th width="9%" class="font-bold">#</th>
            <th width="8%" class="font-bold">名称</th>
            <th width="17%" class="font-bold">数量</th>
        </tr>
        </thead>
        <tbody>
        <?php if($dataProvider != null){ ?>
            <?php foreach($dataProvider->getModels() as $k=>$v){ ?>
                <tr>
                    <td><?= $v['id'] ?></td>
                    <td><?= $v['goods_name'] ?></td>
                    <td><?= $v['goods_num'] ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3" style="text-align: right">
                <?php
                if($dataProvider != null){
                    echo \app\components\LoadPager::widget([
                        'pagination'=>$dataProvider->pagination,
                        'nextPageLabel' => '下一页',
                        'prevPageLabel' => '上一页',
                        'firstPageLabel' => '首页'
                    ]);
                }
                ?>
            </td>
        </tr>
        </tfoot>
    </table>
</div>