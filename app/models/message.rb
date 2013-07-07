class Message
  # To change this template use File | Settings | File Templates.
  include ActiveAttr::Model

  attribute :name
  attribute :email
  attribute :phone
  attribute :contact_method
  attribute :type
  attribute :content

  validates_presence_of :name
  validates_format_of :email, :with => /^[-a-z0-9_+\.]+\@([-a-z0-9]+\.)+[a-z0-9]{2,4}$/i
  validates_length_of :content, :maximum => 50
end