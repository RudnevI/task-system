<?php

namespace App\Http\Controllers;

use App\Service\ResourceService;

class ResourceController extends Controller {
    public function getUserAdminPanel() {
        return ResourceService::getUserAdminPageWithData();
    }

    public function getTaskAdminPanel() {
        return ResourceService::getTaskAdminPageWithData();
    }

    public function getProjectAdminPanel() {
        return ResourceService::getProjectPageWithData();
    }

    public function getUserCreationForm() {
        return ResourceService::getUserCreationForm();
    }

    public function getTaskCreationForm() {
        return ResourceService::getTaskCreationForm();
    }

    public function getProjectCreationForm() {
        return ResourceService::getProjectCreationForm();
    }

    public function getUserUpdateForm($id) {
        return ResourceService::getUserUpdateForm($id);
    }

    public function getTaskUpdateForm($id) {
        return ResourceService::getTaskUpdateForm($id);
    }

    public function getProjectUpdateForm($id) {
        return ResourceService::getProjectUpdateForm($id);
    }



}
