<?php

namespace Tnt\Weather\Plugin\Block;

use Magento\Framework\Data\Tree\NodeFactory;

class Topmenu {

    /**
     * @var NodeFactory
     */
    protected $nodeFactory;

    public function __construct(
        NodeFactory $nodeFactory
    ) {
        $this->nodeFactory = $nodeFactory;
    }

    public function beforeGetHtml(
        \Magento\Theme\Block\Html\Topmenu $subject,
        $outermostClass = '',
        $childrenWrapClass = '',
        $limit = 0
    ) {
        $node = $this->nodeFactory->create(
            [
                'data' => $this->getNodeAsArray(),
                'idField' => 'id',
                'tree' => $subject->getMenu()->getTree()
            ]
        );
        $subject->getMenu()->addChild($node);
    }

    protected function getNodeAsArray() {
        $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $parsedUrl = parse_url($root);
        
        $port = '';
        if ($_SERVER['SERVER_PORT'] != '80' && $_SERVER['SERVER_PORT'] != '443') {
            $port = ':' . $_SERVER['SERVER_PORT'];
        }
        $root = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . $port;

        $url = $root . '/weather/page/index';
        return [
            'name' => 'Thời tiết',
            'id' => 'weather',
            'url' => $url,
            'has_active' => false,
            'is_active' => false
        ];
    }
}
