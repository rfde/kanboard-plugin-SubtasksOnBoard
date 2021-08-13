<?php

namespace Kanboard\Plugin\SubtasksOnBoard;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->helper->register('subtasklistHelper', '\Kanboard\Plugin\SubtasksOnBoard\Helper\SubtasklistHelper');
        $this->template->hook->attach('template:board:private:task:after-title', 'SubtasksOnBoard:board/subtasklist');
        $this->hook->on("template:layout:css", array("template" => "plugins/SubtasksOnBoard/Asset/style.css"));
    }

    public function onStartup()
    {
    }

    public function getPluginName()
    {
        return 'Show Subtasks on Board';
    }

    public function getPluginDescription()
    {
        return t('Adds subtasks to the cards in board view.');
    }

    public function getPluginAuthor()
    {
        return 'Till Schlueter';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/rfde/kanboard-plugin-SubtasksOnBoard';
    }
}

