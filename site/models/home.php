<?php


class HomePage extends Page
{
    public function selbstdarstellung_bild()
{
    return $this->content()->get('selbstdarstellung_bild')->toFile() ?? $this->image();

}
}