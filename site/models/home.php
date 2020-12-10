<?php


class HomePage extends Page
{
    public function selbstdarstellung_bild()
{
    return $this->content()->get('selbstdarstellung_bild')->toFile() ?? $this->image();

}
public function team_bild()
{
    return $this->content()->get('team_bild')->toFile() ?? $this->image();

}
}