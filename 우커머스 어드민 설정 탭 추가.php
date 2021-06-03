<?php
/**
 * Plugin Name: WooCommerce Settings Tab Demo kr
 * Plugin URI: https://github.com/project0210/project0210
 * Description: A plugin demonstrating how to add a WooCommerce settings tab.
 * Author: project0210
 * Author URI: http://project0210.com/
 * Version: 1.0
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * 우커머스 어드민 셋팅 탭에 추가하기 위한 목적이며, 번역 설명과 추가 코드를 삽입했습니다.
 * 
 */

add_filter( 'woocommerce_settings_tabs_array', __CLASS__ . '::add_settings_tab', 50 ); //탭 추가
add_action( 'woocommerce_settings_tabs_settings_tab_demo', __CLASS__ . '::settings_tab' ); //탭 추가
add_action( 'woocommerce_update_options_settings_tab_demo', __CLASS__ . '::update_settings' ); //탭 내용 업데이트(DB에 입력)
add_action( 'woocommerce_admin_field_custom_type', __CLASS__ . '::output_custom_type', 10, 1 ); //커스텀 타입 필드 출력
		
function output_custom_type($value){
	// 커스텀 필드를 추가할 때
	echo $value['desc'];
}

function add_settings_tab( $settings_tabs ) {
	$settings_tabs['settings_tab_demo'] = __( 'Settings Demo Tab', 'woocommerce-settings-tab-demo' );
	return $settings_tabs;
}

function settings_tab() { //커스텀 필드 탭 내용 받아오기
	woocommerce_admin_fields( self::get_settings() );
}

function update_settings() { //필드 DB업데이트
	woocommerce_update_options( self::get_settings() );
}

function get_settings() {
	$settings = array(
		'section_title' => array( //섹션 제목
			'name'     => __( '출력되는 제목', 'woocommerce-settings-tab-demo' ), //name 출력
			'type'     => 'title', //타입
			'desc'     => '', //설명
			'id'       => 'wc_settings_tab_demo_section_title'
		),
		'title' => array( 
			'name' => __( 'Title', 'woocommerce-settings-tab-demo' ),
			'type' => 'text',
			'desc' => __( 'This is some helper text', 'woocommerce-settings-tab-demo' ),
			'id'   => 'wc_settings_tab_demo_title'
		),
		'description' => array(
			'name' => __( 'Description', 'woocommerce-settings-tab-demo' ),
			'type' => 'textarea',
			'desc' => __( 'This is a paragraph describing the setting. Lorem ipsum yadda yadda yadda. Lorem ipsum yadda yadda yadda. Lorem ipsum yadda yadda yadda. Lorem ipsum yadda yadda yadda.', 'woocommerce-settings-tab-demo' ),
			'id'   => 'wc_settings_tab_demo_description' // DB에 입력될 KEY
		),
		'custome_type' => array(
			'name' => __( 'Custom type', 'woocommerce-settings-tab-demo' ),
			'type' => 'custom_type', 
			'desc' => '<h1>custom type</h1> you can put any code here <script></script>',
			'id'   => 'wc_settings_tab_demo_custom_type'
		),
		'section_end' => array( //필수
			'type' => 'sectionend',
			'id' => 'wc_settings_tab_demo_section_end'
		)
	);

	return $settings;
}

add_action('woocommerce_settings_tabs_after', 'settings_tab'); // 필드 아래에 추가될 HTML
function settings_tab(){ //테이블 구조로 바로 출력되게 할 수 있음. DB에 업데이트가 되길 원한다면 fields를 사용할 것,
	?>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row" class="titledesc">
						제목
					</th>
					<td class="forminp">
						내용
					</td>
				</tr>
			</tbody>
		</table>
	<?php
}
