<?php
			if (is_file(JPATH_THEMES . DS . $this->document->template . DS . 'css' . DS . 'custom.css'))
				$styles['template'][] = 'custom.css';