<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class GetAccessRuleRequest extends Model
{
    /**
     * @example acg-e3755fb0-358d-4286-9942-8d461048****
     *
     * @var string
     */
    public $accessGroupId;

    /**
     * @example acr-c38028f0-f313-4385-9456-3501b1f5****
     *
     * @var string
     */
    public $accessRuleId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $inputRegionId;
    protected $_name = [
        'accessGroupId' => 'AccessGroupId',
        'accessRuleId'  => 'AccessRuleId',
        'inputRegionId' => 'InputRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupId) {
            $res['AccessGroupId'] = $this->accessGroupId;
        }
        if (null !== $this->accessRuleId) {
            $res['AccessRuleId'] = $this->accessRuleId;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupId'])) {
            $model->accessGroupId = $map['AccessGroupId'];
        }
        if (isset($map['AccessRuleId'])) {
            $model->accessRuleId = $map['AccessRuleId'];
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }

        return $model;
    }
}
