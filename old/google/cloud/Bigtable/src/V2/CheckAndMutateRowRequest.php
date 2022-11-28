<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for Bigtable.CheckAndMutateRow.
 *
 * Generated from protobuf message <code>google.bigtable.v2.CheckAndMutateRowRequest</code>
 */
class CheckAndMutateRowRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the table to which the conditional mutation should be
     * applied.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $table_name = '';
    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 7;</code>
     */
    private $app_profile_id = '';
    /**
     * Required. The key of the row to which the conditional mutation should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $row_key = '';
    /**
     * The filter to be applied to the contents of the specified row. Depending
     * on whether or not any results are yielded, either `true_mutations` or
     * `false_mutations` will be executed. If unset, checks that the row contains
     * any values at all.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.RowFilter predicate_filter = 6;</code>
     */
    private $predicate_filter = null;
    /**
     * Changes to be atomically applied to the specified row if `predicate_filter`
     * yields at least one cell when applied to `row_key`. Entries are applied in
     * order, meaning that earlier mutations can be masked by later ones.
     * Must contain at least one entry if `false_mutations` is empty, and at most
     * 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Mutation true_mutations = 4;</code>
     */
    private $true_mutations;
    /**
     * Changes to be atomically applied to the specified row if `predicate_filter`
     * does not yield any cells when applied to `row_key`. Entries are applied in
     * order, meaning that earlier mutations can be masked by later ones.
     * Must contain at least one entry if `true_mutations` is empty, and at most
     * 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Mutation false_mutations = 5;</code>
     */
    private $false_mutations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table_name
     *           Required. The unique name of the table to which the conditional mutation should be
     *           applied.
     *           Values are of the form
     *           `projects/<project>/instances/<instance>/tables/<table>`.
     *     @type string $app_profile_id
     *           This value specifies routing for replication. If not specified, the
     *           "default" application profile will be used.
     *     @type string $row_key
     *           Required. The key of the row to which the conditional mutation should be applied.
     *     @type \Google\Cloud\Bigtable\V2\RowFilter $predicate_filter
     *           The filter to be applied to the contents of the specified row. Depending
     *           on whether or not any results are yielded, either `true_mutations` or
     *           `false_mutations` will be executed. If unset, checks that the row contains
     *           any values at all.
     *     @type \Google\Cloud\Bigtable\V2\Mutation[]|\Google\Protobuf\Internal\RepeatedField $true_mutations
     *           Changes to be atomically applied to the specified row if `predicate_filter`
     *           yields at least one cell when applied to `row_key`. Entries are applied in
     *           order, meaning that earlier mutations can be masked by later ones.
     *           Must contain at least one entry if `false_mutations` is empty, and at most
     *           100000.
     *     @type \Google\Cloud\Bigtable\V2\Mutation[]|\Google\Protobuf\Internal\RepeatedField $false_mutations
     *           Changes to be atomically applied to the specified row if `predicate_filter`
     *           does not yield any cells when applied to `row_key`. Entries are applied in
     *           order, meaning that earlier mutations can be masked by later ones.
     *           Must contain at least one entry if `true_mutations` is empty, and at most
     *           100000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the table to which the conditional mutation should be
     * applied.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * Required. The unique name of the table to which the conditional mutation should be
     * applied.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;

        return $this;
    }

    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 7;</code>
     * @return string
     */
    public function getAppProfileId()
    {
        return $this->app_profile_id;
    }

    /**
     * This value specifies routing for replication. If not specified, the
     * "default" application profile will be used.
     *
     * Generated from protobuf field <code>string app_profile_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAppProfileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_profile_id = $var;

        return $this;
    }

    /**
     * Required. The key of the row to which the conditional mutation should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRowKey()
    {
        return $this->row_key;
    }

    /**
     * Required. The key of the row to which the conditional mutation should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRowKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->row_key = $var;

        return $this;
    }

    /**
     * The filter to be applied to the contents of the specified row. Depending
     * on whether or not any results are yielded, either `true_mutations` or
     * `false_mutations` will be executed. If unset, checks that the row contains
     * any values at all.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.RowFilter predicate_filter = 6;</code>
     * @return \Google\Cloud\Bigtable\V2\RowFilter|null
     */
    public function getPredicateFilter()
    {
        return isset($this->predicate_filter) ? $this->predicate_filter : null;
    }

    public function hasPredicateFilter()
    {
        return isset($this->predicate_filter);
    }

    public function clearPredicateFilter()
    {
        unset($this->predicate_filter);
    }

    /**
     * The filter to be applied to the contents of the specified row. Depending
     * on whether or not any results are yielded, either `true_mutations` or
     * `false_mutations` will be executed. If unset, checks that the row contains
     * any values at all.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.RowFilter predicate_filter = 6;</code>
     * @param \Google\Cloud\Bigtable\V2\RowFilter $var
     * @return $this
     */
    public function setPredicateFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\RowFilter::class);
        $this->predicate_filter = $var;

        return $this;
    }

    /**
     * Changes to be atomically applied to the specified row if `predicate_filter`
     * yields at least one cell when applied to `row_key`. Entries are applied in
     * order, meaning that earlier mutations can be masked by later ones.
     * Must contain at least one entry if `false_mutations` is empty, and at most
     * 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Mutation true_mutations = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrueMutations()
    {
        return $this->true_mutations;
    }

    /**
     * Changes to be atomically applied to the specified row if `predicate_filter`
     * yields at least one cell when applied to `row_key`. Entries are applied in
     * order, meaning that earlier mutations can be masked by later ones.
     * Must contain at least one entry if `false_mutations` is empty, and at most
     * 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Mutation true_mutations = 4;</code>
     * @param \Google\Cloud\Bigtable\V2\Mutation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrueMutations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\V2\Mutation::class);
        $this->true_mutations = $arr;

        return $this;
    }

    /**
     * Changes to be atomically applied to the specified row if `predicate_filter`
     * does not yield any cells when applied to `row_key`. Entries are applied in
     * order, meaning that earlier mutations can be masked by later ones.
     * Must contain at least one entry if `true_mutations` is empty, and at most
     * 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Mutation false_mutations = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFalseMutations()
    {
        return $this->false_mutations;
    }

    /**
     * Changes to be atomically applied to the specified row if `predicate_filter`
     * does not yield any cells when applied to `row_key`. Entries are applied in
     * order, meaning that earlier mutations can be masked by later ones.
     * Must contain at least one entry if `true_mutations` is empty, and at most
     * 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Mutation false_mutations = 5;</code>
     * @param \Google\Cloud\Bigtable\V2\Mutation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFalseMutations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\V2\Mutation::class);
        $this->false_mutations = $arr;

        return $this;
    }

}

