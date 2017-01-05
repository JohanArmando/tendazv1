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
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
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
        $domain = $notifiable->shop->domainMain->first()->ssl;
        $url = $domain.'/password/reset/'.$this->token."?email=$notifiable->email";
        $gretting = 'Hola '.$notifiable->full_name;

        return (new MailMessage)
            ->subject('Restablecer contraseña tienda')
            ->success()
            ->greeting($gretting)
            ->line('Usted está recibiendo este correo electrónico porque hemos recibido una solicitud de restablecimiento de contraseña de su cuenta.!')
            ->action('Reestablecer Contraseña', $url)
            ->line('Si no has solicitado un restablecimiento de contraseña, no se requiere ninguna acción adicional.!')
            ->line("Te inivtamos a visitar nuestra tienda <a href='". $domain ."'>" .  $notifiable->shop->name ."</a>!.<br>Gracias $notifiable->full_name");

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
