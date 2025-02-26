<?php

namespace App\Livewire;

use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        $aboutUs = [
            "title" => "About Us",
            "mission" => "At the Risen Christ Memorial Garden (RCMG), we uphold the Christian belief in the Resurrection of the Dead and the sacred duty of treating the departed with respect and charity. 
                        As part of the Roman Catholic Archbishop of Manila (RCAM), we provide a dedicated columbarium for the faithful who have chosen cremation as a way to honor and remember their loved ones.",
            "history" => "Since 1983, the Code of Canon Law has permitted cremation, and we support those who seek a dignified and spiritual resting place for their departed family members.",
            "commitment" => "At RCMG, we strive to offer a peaceful, dignified, and sacred resting place for the faithful departed, in accordance with the teachings of the Catholic Church and the guidance of the Roman Catholic Archbishop of Manila.",
            "contact" => "For more information, please contact the RCMG Committee."
        ];

        return view('livewire.about_us', compact('aboutUs'))
            ->layout('about_layout'); // Use the correct layout path
    }
}
