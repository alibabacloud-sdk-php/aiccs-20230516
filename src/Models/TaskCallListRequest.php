<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Tea\Model;

class TaskCallListRequest extends Model
{
    /**
     * @description 导入号码时返回的批次号
     *
     * @example 1
     *
     * @var string
     */
    public $batchId;

    /**
     * @description 开始外呼时间
     *
     * @example 2022-01-25 00:00:00
     *
     * @var string
     */
    public $callDate;

    /**
     * @description 结束外呼时间
     *
     * @example 2022-01-25 00:00:00
     *
     * @var string
     */
    public $endCallDate;

    /**
     * @description 意向标签
     *
     * @var string[]
     */
    public $intentTags;

    /**
     * @description 号码列表
     *
     * @var string[]
     */
    public $numbers;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description 页数
     *
     * @example 39
     *
     * @var int
     */
    public $page;

    /**
     * @description 每页外呼记录数,正整数，默认10000
     *
     * @example 97
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description 任务ID
     *
     * @example 93
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchId'              => 'BatchId',
        'callDate'             => 'CallDate',
        'endCallDate'          => 'EndCallDate',
        'intentTags'           => 'IntentTags',
        'numbers'              => 'Numbers',
        'ownerId'              => 'OwnerId',
        'page'                 => 'Page',
        'pageSize'             => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'taskId'               => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->callDate) {
            $res['CallDate'] = $this->callDate;
        }
        if (null !== $this->endCallDate) {
            $res['EndCallDate'] = $this->endCallDate;
        }
        if (null !== $this->intentTags) {
            $res['IntentTags'] = $this->intentTags;
        }
        if (null !== $this->numbers) {
            $res['Numbers'] = $this->numbers;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskCallListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['CallDate'])) {
            $model->callDate = $map['CallDate'];
        }
        if (isset($map['EndCallDate'])) {
            $model->endCallDate = $map['EndCallDate'];
        }
        if (isset($map['IntentTags'])) {
            if (!empty($map['IntentTags'])) {
                $model->intentTags = $map['IntentTags'];
            }
        }
        if (isset($map['Numbers'])) {
            if (!empty($map['Numbers'])) {
                $model->numbers = $map['Numbers'];
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
