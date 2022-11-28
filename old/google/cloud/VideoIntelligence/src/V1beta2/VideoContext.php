<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta2/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video context and/or feature-specific parameters.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1beta2.VideoContext</code>
 */
class VideoContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Video segments to annotate. The segments may overlap and are not required
     * to be contiguous or span the whole video. If unspecified, each video is
     * treated as a single segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.VideoSegment segments = 1;</code>
     */
    private $segments;
    /**
     * Config for LABEL_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.LabelDetectionConfig label_detection_config = 2;</code>
     */
    private $label_detection_config = null;
    /**
     * Config for SHOT_CHANGE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.ShotChangeDetectionConfig shot_change_detection_config = 3;</code>
     */
    private $shot_change_detection_config = null;
    /**
     * Config for EXPLICIT_CONTENT_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.ExplicitContentDetectionConfig explicit_content_detection_config = 4;</code>
     */
    private $explicit_content_detection_config = null;
    /**
     * Config for FACE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.FaceDetectionConfig face_detection_config = 5;</code>
     */
    private $face_detection_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VideoIntelligence\V1beta2\VideoSegment[]|\Google\Protobuf\Internal\RepeatedField $segments
     *           Video segments to annotate. The segments may overlap and are not required
     *           to be contiguous or span the whole video. If unspecified, each video is
     *           treated as a single segment.
     *     @type \Google\Cloud\VideoIntelligence\V1beta2\LabelDetectionConfig $label_detection_config
     *           Config for LABEL_DETECTION.
     *     @type \Google\Cloud\VideoIntelligence\V1beta2\ShotChangeDetectionConfig $shot_change_detection_config
     *           Config for SHOT_CHANGE_DETECTION.
     *     @type \Google\Cloud\VideoIntelligence\V1beta2\ExplicitContentDetectionConfig $explicit_content_detection_config
     *           Config for EXPLICIT_CONTENT_DETECTION.
     *     @type \Google\Cloud\VideoIntelligence\V1beta2\FaceDetectionConfig $face_detection_config
     *           Config for FACE_DETECTION.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta2\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Video segments to annotate. The segments may overlap and are not required
     * to be contiguous or span the whole video. If unspecified, each video is
     * treated as a single segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.VideoSegment segments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * Video segments to annotate. The segments may overlap and are not required
     * to be contiguous or span the whole video. If unspecified, each video is
     * treated as a single segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.VideoSegment segments = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta2\VideoSegment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1beta2\VideoSegment::class);
        $this->segments = $arr;

        return $this;
    }

    /**
     * Config for LABEL_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.LabelDetectionConfig label_detection_config = 2;</code>
     * @return \Google\Cloud\VideoIntelligence\V1beta2\LabelDetectionConfig|null
     */
    public function getLabelDetectionConfig()
    {
        return isset($this->label_detection_config) ? $this->label_detection_config : null;
    }

    public function hasLabelDetectionConfig()
    {
        return isset($this->label_detection_config);
    }

    public function clearLabelDetectionConfig()
    {
        unset($this->label_detection_config);
    }

    /**
     * Config for LABEL_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.LabelDetectionConfig label_detection_config = 2;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta2\LabelDetectionConfig $var
     * @return $this
     */
    public function setLabelDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1beta2\LabelDetectionConfig::class);
        $this->label_detection_config = $var;

        return $this;
    }

    /**
     * Config for SHOT_CHANGE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.ShotChangeDetectionConfig shot_change_detection_config = 3;</code>
     * @return \Google\Cloud\VideoIntelligence\V1beta2\ShotChangeDetectionConfig|null
     */
    public function getShotChangeDetectionConfig()
    {
        return isset($this->shot_change_detection_config) ? $this->shot_change_detection_config : null;
    }

    public function hasShotChangeDetectionConfig()
    {
        return isset($this->shot_change_detection_config);
    }

    public function clearShotChangeDetectionConfig()
    {
        unset($this->shot_change_detection_config);
    }

    /**
     * Config for SHOT_CHANGE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.ShotChangeDetectionConfig shot_change_detection_config = 3;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta2\ShotChangeDetectionConfig $var
     * @return $this
     */
    public function setShotChangeDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1beta2\ShotChangeDetectionConfig::class);
        $this->shot_change_detection_config = $var;

        return $this;
    }

    /**
     * Config for EXPLICIT_CONTENT_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.ExplicitContentDetectionConfig explicit_content_detection_config = 4;</code>
     * @return \Google\Cloud\VideoIntelligence\V1beta2\ExplicitContentDetectionConfig|null
     */
    public function getExplicitContentDetectionConfig()
    {
        return isset($this->explicit_content_detection_config) ? $this->explicit_content_detection_config : null;
    }

    public function hasExplicitContentDetectionConfig()
    {
        return isset($this->explicit_content_detection_config);
    }

    public function clearExplicitContentDetectionConfig()
    {
        unset($this->explicit_content_detection_config);
    }

    /**
     * Config for EXPLICIT_CONTENT_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.ExplicitContentDetectionConfig explicit_content_detection_config = 4;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta2\ExplicitContentDetectionConfig $var
     * @return $this
     */
    public function setExplicitContentDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1beta2\ExplicitContentDetectionConfig::class);
        $this->explicit_content_detection_config = $var;

        return $this;
    }

    /**
     * Config for FACE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.FaceDetectionConfig face_detection_config = 5;</code>
     * @return \Google\Cloud\VideoIntelligence\V1beta2\FaceDetectionConfig|null
     */
    public function getFaceDetectionConfig()
    {
        return isset($this->face_detection_config) ? $this->face_detection_config : null;
    }

    public function hasFaceDetectionConfig()
    {
        return isset($this->face_detection_config);
    }

    public function clearFaceDetectionConfig()
    {
        unset($this->face_detection_config);
    }

    /**
     * Config for FACE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.FaceDetectionConfig face_detection_config = 5;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta2\FaceDetectionConfig $var
     * @return $this
     */
    public function setFaceDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1beta2\FaceDetectionConfig::class);
        $this->face_detection_config = $var;

        return $this;
    }

}
