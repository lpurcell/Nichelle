class CreateUsers < ActiveRecord::Migration
  def change
    create_table :users do |t|
      t.string :email
      t.string :username
      t.string :role
      t.string :fname
      t.string :lname
      t.string :password_hash
      t.string :password_salt

      t.timestamps
    end
  end
end
