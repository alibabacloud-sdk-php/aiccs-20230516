<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\SDK\Aiccs\V20230516\Models\TemplateListResponseBody\model_;
use AlibabaCloud\Tea\Model;

class TemplateListResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $message;

    /**
     * @var model_[]
     */
    public $model;

    /**
     * @example 8EFC6D10-307B-1ECA-A8C6-7CBDF776AAD2
     *
     * @var string
     */
    public $requestId;

    /**
     * @example false
     *
     * @var bool
     */
    public $success;

    /**
     * @example 1683440860035
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'model'     => 'Model',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->model) {
            $res['Model'] = [];
            if (null !== $this->model && \is_array($this->model)) {
                $n = 0;
                foreach ($this->model as $item) {
                    $res['Model'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TemplateListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Model'])) {
            if (!empty($map['Model'])) {
                $model->model = [];
                $n            = 0;
                foreach ($map['Model'] as $item) {
                    $model->model[$n++] = null !== $item ? model_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
