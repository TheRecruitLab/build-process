<?php

namespace TRLBuildProcess\Traits;

trait Github
{
    private function setupGithubWorkflows(): void
    {
        $path = '.github/workflows';

        $this->mkdir($path);

        $this->rsyncFileSafely('build.yml', $path.'/build.yml');
    }
}
