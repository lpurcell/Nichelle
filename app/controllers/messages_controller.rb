class MessagesController < ApplicationController
  def new
    @message = Message.new
  end

  def create
    @message = Message.new(params[:message])
    if @message.valid?
      # TODO send message here
      UserMailer.message_confirmation(@message).deliver
      redirect_to root_url, notice: "Message sent! Thank you!"
    else
      render "new"
    end
  end
end
