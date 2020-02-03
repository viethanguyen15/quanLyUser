<?php
function showErrors($errors,$errorName)
{
    if ($errors->has($errorName)) {
        echo '<div class="alert alert-danger" role="alert">';
        echo "<strong>" . $errors->first($errorName) . "</strong>";
        echo '</div>';
    }
}