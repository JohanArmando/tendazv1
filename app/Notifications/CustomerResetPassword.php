<?php

namespace Tendaz\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CustomerResetPassword extends Notification
{
    use Queueable;

    public $token;
    public $shopName;
    public $customerName;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token , $shopName , $customerName)
    {
        $this->token = $token;
        $this->shopName = $shopName;
        $this->customerName = $customerName;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = url('/password/reset/'.$this->token);
        $gretting = session()->has('users') ? 'Hola '.session()->get('users')['name'] :  'Hola '.$this->customerName ;

        return (new MailMessage)
            ->subject('Restablecer contraseña tienda')
            ->greeting($gretting)
            ->line('Usted está recibiendo este correo electrónico porque hemos recibido una solicitud de restablecimiento de contraseña de su cuenta.!')
            ->action('Reestable Contraseña', $url)
            ->line('Si no has solicitado un restablecimiento de contraseña, no se requiere ninguna acción adicional.!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
        ];
    }
}
