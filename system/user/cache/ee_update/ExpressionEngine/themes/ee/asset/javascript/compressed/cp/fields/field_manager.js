/**
 * ExpressionEngine (https://expressionengine.com)
 *
 * @link      https://expressionengine.com/
 * @copyright Copyright (c) 2003-2018, EllisLab, Inc. (https://ellislab.com)
 * @license   https://expressionengine.com/license
 */
!function(e){var i={onFormLoad:function(i){FieldManager.fireEvent("fieldModalDisplay",i),EE.cp.fieldToggleDisable(i),e("input[name=field_label]",i).bind("keyup keydown",function(){e(this).ee_url_title("input[name=field_name]",!0)})}};new MutableSelectField("channel_fields",Object.assign(EE.fieldManager.fields,i))}(jQuery);