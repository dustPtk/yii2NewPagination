<?php
/**
 * Created by PhpStorm.
 * User: ptk
 * Date: 17/10/18
 * Time: 下午3:38
 */
namespace app\components;

use yii\data\load\LoadPagination;
use yii\widgets\LinkPager;
use yii\helpers\Html;

class LoadPager extends LinkPager
{
    public $currentPageLabel = true;

    protected function renderPageButtons()
    {
        $buttons = [];
        /** @var LoadPagination $this->pagination */
        $currentPage = $this->pagination->getPage();
        // first page
        $firstPageLabel = $this->firstPageLabel === true ? '1' : $this->firstPageLabel;
        if ($firstPageLabel !== false) {
            $buttons[] = $this->renderPageButton($firstPageLabel, 0, $this->firstPageCssClass, $currentPage <= 0, false);
        }
        // prev page
        if ($this->prevPageLabel !== false) {
            if (($page = $currentPage - 1) < 0) {
                $page = 0;
            }
            $buttons[] = $this->renderPageButton($this->prevPageLabel, $page, $this->prevPageCssClass, $currentPage <= 0, false);
        }

        //current page
        if ($this->currentPageLabel !== false) {
            $buttons[] = $this->renderPageButton($currentPage + 1, $currentPage, $this->activePageCssClass, false, true);
        }

        // next page
        if ($this->nextPageLabel !== false) {
            if (!$this->pagination->checkHasMoreData()) {
                $page = $currentPage;
            } else {
                $page = $currentPage + 1;
            }
            $buttons[] = $this->renderPageButton($this->nextPageLabel, $page, $this->nextPageCssClass, !$this->pagination->checkHasMoreData(), false);
        }

        return Html::tag('ul', implode("\n", $buttons), $this->options);
    }
}