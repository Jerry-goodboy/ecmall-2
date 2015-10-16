<?php

/**
 * 特产楼层挂件
 *
 * @return  array   $image_list
 */
class Tc_floor_2Widget extends BaseWidget {

    var $_name = 'tc_floor_2';
    var $_ttl = 1800;

    function _get_data() {
        $cache_server = & cache_server();
        $key = $this->_get_cache_id();
        $data = $cache_server->get($key);
        if ($data === false) {
        $data = array(
            'model_id' => mt_rand(),
            'tc2_image_list' => $this->options['tc2_image_list'],
        );

        $cache_server->set($key, $data, $this->_ttl);
        }

        return $data;
    }

    function parse_config($input) {
        for ($i = 0; $i < 6; $i++) {
            if (!empty($input['tc2_image_url'][$i])) {
                $result[] = array(
                    'tc2_image_url' => $input['tc2_image_url'][$i],
                    'tc2_link_url' => $input['tc2_link_url'][$i],
                    'tc2_title' => $input['tc2_title'][$i]
                );
            }
        }
        $input['tc2_image_list'] = $result;
        unset($input['tc2_image_url']);
        unset($input['tc2_link_url']);
        unset($input['tc2_title']);
        return $input;
    }

    function _upload_image() {
        import('uploader.lib');
        $images = array();
        for ($i = 0; $i < 6; $i++) {
            $file = array();
            foreach ($_FILES['tc2_image_file'] as $key => $value) {
                $file[$key] = $value[$i];
            }
            if ($file['error'] == UPLOAD_ERR_OK) {
                $uploader = new Uploader();
                $uploader->allowed_type(IMAGE_FILE_TYPE);
                $uploader->addFile($file);
                $uploader->root_dir(ROOT_PATH);
                $images[$i] = $uploader->save('data/files/mall/template', $uploader->random_filename());
            }
        }
        return $images;
    }

}

?>