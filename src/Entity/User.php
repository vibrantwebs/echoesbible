<?php declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTimeImmutable;
use Exception;

#[ORM\Entity]
#[ORM\Table(name: 'user', schema: 'moose_echoesbible')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'bigint')]
    private ?int $id = null;

    #[ORM\Column(name: 'first_name')]
    public string $firstName {
        set(string $value) {
            if (empty($value)) {
                throw new Exception("First name cannot be empty");
            }
            $this->firstName = $value;
        }
    }

    #[ORM\Column(name: 'last_name')]
    public string $lastName {
        set(string $value) {
            if (empty($value)) {
                throw new Exception("First name cannot be empty");
            }
            $this->lastName = $value;
        }
    }

    #[ORM\Column(length: 255, unique: true)]
    public string $email;

    #[ORM\Column(name: 'password', length: 255)]
    private string $encryptedPassword;

    #[ORM\Column(name: 'created_timestamp')]
    private DateTimeImmutable $createdTimestamp;

    public function __construct(
        $firstName,
        $lastName,
        $email,
        $password // todo: this needs to be encrypted before persist
    )
    {
        $this->firstName = trim($firstName);
        $this->lastName = trim($lastName);
        $this->email = trim($email);
        $this->encryptedPassword = $password;
        $this->createdTimestamp = new DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEncryptedPassword(): string
    {
        return $this->encryptedPassword;
    }

    public function setEncryptedPassword(string $encryptedPassword)
    {
        $this->encryptedPassword = $encryptedPassword;
    }

    public function getCreatedTimestamp(): DateTimeImmutable
    {
        return $this->createdTimestamp;
    }

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
