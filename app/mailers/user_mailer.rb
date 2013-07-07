class UserMailer < ActionMailer::Base
  default :to => "mrs.laura.purcell@gmail.com"

  def message_confirmation(message)
    @message = message

    mail(:subject => "New Client from website", :from => @message.email)
  end
end